<x-layout>

    <div class="form-container">
        <h2>Sign up</h2>
        <form action="{{route('userstore')}}" method="POST">
            @csrf
            @method('POST')
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">First Name</label>
                <div class="col-md-9">
                    <input type="text" value="{{old('name')}}"  name="name" class="form-control input-sm"/>
                    @error('name')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Email</label>
                <div class="col-md-9">
                    <input type="text" value="{{old('email')}}" name="email"  class="form-control input-sm"/>
                    @error('email')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Password</label>
                <div class="col-md-9">
                    <input type="text" path="lastName" value="{{old('password')}}" name="password" class="form-control input-sm"/>
                    @error('password')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Confirm Password</label>
                <div class="col-md-9">
                    <input type="text" value="{{old('password_confirmation')}}"  name="password_confirmation" class="form-control input-sm"/>
                    @error('password_confirmation')
                    <p class="text-danger text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="form-actions floatRight">
                <input type="submit" value="Register" class="btn btn-primary btn-sm">
            </div>
        </div>
    </form>
    </div>
</x-layout>