<x-layout>
    <div class="form-container">
        <h2>Update Job</h2>
        <form action="{{route('jobupdate',$listing->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Title</label>
                <div class="col-md-9">
                    <input type="text" value="{{$listing->title}}" path="firstName" name="title" class="form-control input-sm"/>
                    @error('title')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
            </div>
           
           
                
         
    
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Tags</label>
                <div class="col-md-9">
                    <input type="text" value="{{$listing->tags}}" path="firstName" name="tags" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">locations</label>
                <div class="col-md-9">
                    <input type="text" path="firstName" value="{{$listing->locatios}}" name="locatios" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Company</label>
                <div class="col-md-9">
                    <input type="text" path="firstName" value="{{$listing->company}}" name="company" class="form-control input-sm"/>
                    @error('company')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
            </div>
           
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                {{-- <label class="" for="firstName">Logo</label> --}}
                <label for="formFileLg" class="form-label col-md-3 control-lable">logo</label>
                <div class="col-md-9">
                    {{-- <input type="text" path="firstName"  name="logo" class="form-control input-sm"/> --}}
                    <input class="form-control form-control-sm input-sm" name="logo" id="formFileLg" type="file" />
                    <img style="height:50px" src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('images/a1.jpg')}}" class="img-responsive" alt=""/>

                    @error('company')
                    <p class="text-danger text-xs mt-1">{{$logo}}</p>
                @enderror
                </div>
            </div>
           
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Email</label>
                <div class="col-md-9">
                    <input type="text" path="firstName" value="{{$listing->email}}" name="email" class="form-control input-sm"/>
                    @error('email')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Website</label>
                <div class="col-md-9">
                    <input type="text" path="firstName" value="{{$listing->website}}" name="website" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Description</label>
                <div class="col-md-9">
                    <input type="text" path="firstName" value="{{$listing->description}}" name="description" class="form-control input-sm"/>
                    @error('description')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
            </div>
          
         </div>
    
    
         <input  value="{{$listing->id}}" name="id" class="hidden">

    
         
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Update" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
    </x-layout>