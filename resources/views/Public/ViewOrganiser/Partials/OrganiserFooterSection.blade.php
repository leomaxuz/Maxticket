<footer id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                {{--maxticket is provided free of charge on the condition the below hyperlink is left in place.--}}
                {{--See https://github.com/maxticket/maxticket/blob/master/LICENSE for more information.--}}
                @include('Shared.Partials.PoweredBy')

                @if(Utils::userOwns($organiser))
                    &bull;
                    <a class="adminLink"
                       href="{{route('showOrganiserDashboard' , ['organiser_id' => $organiser->id])}}">@lang("Public_ViewOrganiser.organiser_dashboard")</a>
                @endif
            </div>
        </div>
    </div>
</footer>
