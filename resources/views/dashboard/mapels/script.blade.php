<script>
    const name=document.querySelector('#name');
    const slug=document.querySelector('#slug');
    name.addEventListener('change', function(){
    fetch('/mapel/slug?name=' +name.value)
    .then(response=> response.json())
    .then(data=> slug.value=data.slug)
    })
</script>