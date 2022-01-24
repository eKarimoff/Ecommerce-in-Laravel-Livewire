<div class="container" style="padding:30px 0;">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Profile
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                    @if($user->profile->image)
                    <img src="{{asset('assets/images/profile')}}/{{$user->profile->image}}" width="50%" style="border-radius: 50%">
                    @else
                    <img src="{{asset('assets/images/profile/Random.png')}}" width="50%">
                    @endif
                </div>
                <div class="col-md-8">
                    <p><b>Name:</b>{{$user->name}}</p>
                    <p><b>Name:</b>{{$user->email}}</p>
                    <p><b>Name:</b>{{$user->profile->mobile}}</p>
                    <hr>
                    <p><b>Line1:</b>{{$user->profile->line1}}</p>
                    <p><b>Line2:</b>{{$user->profile->line2}}</p>
                    <p><b>City:</b>{{$user->profile->city}}</p>
                    <p><b>Province:</b>{{$user->profile->province}}</p>
                    <p><b>Country:</b>{{$user->profile->country}}</p>
                    <p><b>Zipcode:</b>{{$user->profile->zipcode}}</p>

                </div>
            </div>
        </div>
    </div>
</div>