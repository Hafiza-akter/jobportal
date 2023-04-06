@if(session()->has('message'))
  <p x-data="{ show: true }" x-init="setTimeout(()=> show= false, 3000)" x-show="show">  <span>{{session('message')}}</span> </p>
@endif