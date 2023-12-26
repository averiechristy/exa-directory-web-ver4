@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
         
          <div class="d-sm-flex align-items-center justify-content-between border-bottom">
          </div>
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="content">
              
              <div class="card mt-5">
                  
                  <div class="card-header">
                    <p class="mt-2" style="font-size: 14pt;">Tambah Folder</p>
                   
                  </div>
                  <div class="card-body">
                      <form action="{{route('admin.folder.simpan')}}" method="post">
                           @csrf

                           <label for="" class="form-label"style="font-size: 11pt; font-weight: bold;">Pilih Group</label>

<div class="form-group mb-4">
@foreach ($usergroup as $key => $item)
@if ($key % 5 == 0 && $key != 0)
</div><div class="form-group mb-4">
@endif
<div class="form-check" style="display: inline-block; margin-right: 10px;">
<input class="form-check-input" name="group[]" type="checkbox" value="{{ $item->id }}" id="flexCheckIndeterminate{{ $key }}">
<label class="form-check-label" style="margin-left: 5px;" for="flexCheckIndeterminate{{ $key }}">
{{ $item->nama_group }}
</label>
</div>
@endforeach
</div>
                           <div class="form-group mb-4">
                               <label for="" class="form-label"style="font-size: 11pt; font-weight: bold;">Nama Folder</label>
                               <input name="nama_folder" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" style="border-color: #01004C;" value="" required />
                               <!-- @if ($errors->has('name'))
                                   <p class="text-danger">{{$errors->first('name')}}</p>
                               @endif -->
                           </div>
                      
                           
                           <div class="form-group mb-4">
                               <button type="submit" class="btn " style="width:80px; height: 30px; background-color: #01004C; color: white; font-size: 12px;">Save</button>
                           </div>
                       </form>
                   </div>
                </div>

            </div>

        </div>
        
  
    
  </div>

 

@endsection