@extends('layouts.layout')
@section('content')
    <h1>Add Member</h1>
    <form action="{{route('createMember', ['id'=>$groupId])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input name="fullname" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input full name here">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input name="email" type="email" class="form-control" id="formGroupExampleInput" placeholder="Input e-mail here">
        </div>
        <div class="mb-3">
            <label for="WA" class="form-label">Whatsapp Number</label>
            <input name="WA" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Whatsapp Number here">
        </div>
        <div class="mb-3">
            <label for="lineId" class="form-label">LINE ID</label>
            <input name="lineId" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input LINE ID here">
        </div>
        <div class="mb-3">
            <label for="github" class="form-label">Github/Gitlab ID</label>
            <input name="github" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Github/Gitlab ID here">
        </div>
        <div class="mb-3">
            <label for="birthPlace" class="form-label">Birth Place</label>
            <input name="birthPlace" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Birth Place here">
        </div>
        <div class="mb-3">
            <label for="birthDate" class="form-label">Birth Date</label>
            <input name="birthDate" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Birth Date">
        </div>
        <div class="mb-3">
            <label for="CV" class="form-label">Upload CV</label>
            <input class="form-control" type="file" id="CV" name='CV'>
        </div>
        {{-- <div class="mb-3">
            <label for="genreId" class="form-label">Genre</label>
            <select name="genreId" class="form-select" aria-label="Default select example">
                <option selected>Select Here</option>
                <option value="1">Binusian</option>
                <option value="2">Non-Binusian</option>
              </select>
        </div> --}}
        <div class="mb-3">
            <label for="IdCard" class="form-label">Upload Flazz Card untuk Binusian/ID Card untuk Non Binusian</label>
            <input class="form-control" type="file" id="IdCard" name='IdCard'>
        </div>


        {{-- <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input price here">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <button type="submit" class="btn btn-success">Insert</button>
    </form>
@endsection
