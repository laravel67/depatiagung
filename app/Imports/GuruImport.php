<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Guru;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\RemembersChunkOffset;

class GuruImport implements ToCollection, WithHeadingRow, WithChunkReading
{
    use RemembersChunkOffset;
    private $successCount = 0;

    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            if (isset($row['nama']) && isset($row['pendidikan']) && isset($row['mulai mengajar']) && isset($row['biografi'])) {
                $name = ucwords(strtolower($row['nama']));
                $pendidikan = $row['pendidikan'];
                $mulaiMengajar = Carbon::parse($row['mulai mengajar'])->toDateString();
                $deskripsi = $row['biografi'];
                Guru::firstOrCreate(
                    ['name' => $name],
                    [
                        'pendidikan' => $pendidikan,
                        'mulai_mengajar' => $mulaiMengajar,
                        'deskripsi' => $deskripsi,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]
                );
                $this->successCount++;
            }
        }
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    public function getSuccessCount(): int
    {
        return $this->successCount;
    }
}
