<x-layout>
    @unless(count($listings) == 0)
    

    <div class="col-md-9 single_right">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
    @foreach($listings as $listing)

    
          <tr>
            <th scope="row">1</th>
            <td>{{$listing->title}}</td>
            <td>
                <a href="{{route('editjob',$listing->id)}}" class="seeking-vote-button sm">Edit</a>
                    <div class="seeking_vote">
                    
                    <form method="POST" action="{{route('destroyjob',$listing->id)}}">
                        @csrf
                        @method('DELETE')
                    <button  class="btn btn-danger sm">Delete</button>

                    </form>
                    </div>
            </td>
           
          </tr>
       
        
    {{-- <x-listing-card :listing="$listing" /> --}}
    
    @endforeach
</tbody>
</table>
       <ul class="pagination jobs_pagination">
            {{-- <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> --}}
            {{-- <li>{{$listings->links()}}</li> --}}
         </ul>
       </div>
       <div class="col-md-3">
                 <div class="widget_search">
                <h5 class="widget-title">Search</h5>
                
                <div class="widget-content">
                    <span>I'm looking for a ...</span>
                    {{-- <label class="btn2 btn-2 btn2-1b"><input type="" value="Find Jobs"></label> --}}
                    <select class="form-control jb_1">
                        <option value="0">Job</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                        <option value="">Category</option>
                    </select>
                    <span>in</span>
                    <input type="text" class="form-control jb_2" placeholder="Location">
                    <input type="text" class="form-control jb_2" placeholder="Industry / Role">
                    <input type="submit" class="btn btn-default" value="Search">
                </div>
              </div>
                 <div class="col_3">
                     <h3>Work Experiance</h3>
                       <table class="table">
                        <tbody>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Junior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Senior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Middle
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Junior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Junior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Junior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Junior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Junior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Junior
                                </td>
                                <td>
                                    (56)
                                </td>
                            </tr>
                    </tbody>
                 </table>
                 </div>
                 <div class="col_3">
                     <h3>Work Permit</h3>
                     <table class="table">
                        <tbody>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Full time
                                </td>
                            </tr>
                            <tr class="unread checked">
                                <td class="hidden-xs">
                                    <input type="checkbox" class="checkbox">
                                </td>
                                <td class="hidden-xs">
                                    Parttime
                                </td>
                            </tr>
                        </tbody>
                 </table>
                 </div>
           </div>
       <div class="clearfix"> </div>
   

   
    @else
    <p> No listing Found </p>
    @endunless

    {{-- $listings->links() --}}
</x-layout>