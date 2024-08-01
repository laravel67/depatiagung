<?php

namespace App\Http\Controllers;

use App\Imports\BidangImport;
use Illuminate\Http\Request;
use App\Imports\JabatanImport;
use App\Imports\MapelImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

class ImportExcelController extends Controller
{
    public function jabatan(Request $request)
    {
        HeadingRowFormatter::default('none');
        $import = new JabatanImport;

        try {
            Excel::import($import, $request->file('import'));
            $successCount = $import->getSuccessCount();
            if ($successCount > 0) {
                return redirect()->route('admin.jabatan')->with('success', $successCount . ' Jabatan berhasil diimport');
            } else {
                return redirect()->route('admin.jabatan')->with('error', 'Tidak ada data yang berhasil diimport.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing data. Please check the file format.');
        }
    }

    public function bidang(Request $request)
    {
        HeadingRowFormatter::default('none');
        $import = new BidangImport;

        try {
            Excel::import($import, $request->file('import'));
            $successCount = $import->getSuccessCount();
            if ($successCount > 0) {
                return redirect()->route('admin.bidang')->with('success', $successCount . ' Bidang berhasil diimport');
            } else {
                return redirect()->route('admin.bidang')->with('error', 'Tidak ada data yang berhasil diimport.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing data. Please check the file format.');
        }
    }

    public function mapel(Request $request)
    {
        HeadingRowFormatter::default('none');
        $import = new MapelImport;

        try {
            Excel::import($import, $request->file('import'));
            $successCount = $import->getSuccessCount();
            if ($successCount > 0) {
                return redirect()->route('mapel.index')->with('success', $successCount . ' Mata Pelajaran berhasil diimport');
            } else {
                return redirect()->route('mapel.index')->with('error', 'Tidak ada data yang berhasil diimport.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing data. Please check the file format.');
        }
    }
}
