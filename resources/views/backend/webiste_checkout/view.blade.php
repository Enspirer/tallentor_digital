@extends('backend.layouts.app')

@section('title', __('View'))

@section('content')
    
   
        <div class="row">
            <div class="col-12 p-1">
                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">

                            <div class="row">
                                        
                                <div class="row pe-0">
                                    <div class="col-12">
                                        <table class="table table-hover table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td width="14%" style="font-weight: 600; font-size:16px;">url:</td>
                                                    <td style="font-size:16px;">{{ $webiste_checkout->url }}</td>
                                                </tr>
                                                @if($webiste_checkout->user_id != null)
                                                    @if(App\Models\Auth\User::where('id',$webiste_checkout->user_id)->first() == null)
                                                        <tr>
                                                            <td style="font-weight: 600; font-size:16px;">User:</td>
                                                            <td style="font-size:16px;"><span class="badge badge-danger">User Deleted</span></td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td style="font-weight: 600; font-size:16px;">User:</td>
                                                            <td style="font-size:16px;">{{ App\Models\Auth\User::where('id',$webiste_checkout->user_id)->first()->name }}</td>
                                                        </tr>
                                                    @endif
                                                @endif
                                            </tbody>                                            
                                        </table>
                                    </div>                                            
                                            
                                </div>
                            </div>                            

                            <div class="mt-5 text-right">
                                <input type="hidden" name="hidden_id" value="{{ $webiste_checkout->id }}"/>
                                <a href="{{route('admin.webiste_checkout.index')}}" type="button" class="btn rounded-pill text-light px-4 py-2 me-2 btn-primary">Back</a>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

<br><br>
@endsection
