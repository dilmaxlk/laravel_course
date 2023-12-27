<h1>Upload Photo</h1>
<div>
    <img src="{{ asset('storage/uploads/new_image.jpg') }}" alt="" style="width: 300px;">
</div>

<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="my_files">
<button type="submit" >SUBMIT</button>
</form>