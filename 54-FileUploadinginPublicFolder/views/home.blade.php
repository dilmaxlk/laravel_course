<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="my_files">
<button type="submit" >SUBMIT</button>
</form>