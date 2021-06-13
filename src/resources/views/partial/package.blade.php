<div class="card col-lg-12 col-md-12 col-sm-12 mt-2 shadow p-0" filter="{{ $depend["name"] }}">
    <div class="card-header btn text-left" data-toggle="collapse" data-target="#{{ str_replace("/","_", $depend["name"]) }}">
        <a class="font-weight-bold" target="__blank" href="{{ $depend["source"]["url"] }}">{{ $depend["name"] }}</a>

        <div class="badges float-right">
            <span class="badge badge-warning mr-1">
                <i class="fas fa-window-restore"></i>
                {{ $depend["version"] }}
            </span>

            <span class="badge badge-success mr-1">
                {{ $depend["type"] }}
            </span>
            @if (!empty($depend["abandoned"]))
            <span v-if="depend.abandoned" class="badge badge-danger mr-1">
                <i class="fa fa-close"></i>
                {{ __('lpmanager::lpmanager.Abandoned') }}
            </span>
            @endif

            <a href="{{ $depend['dist']['url'] }}" class="badge badge-info mr-1">
                <i class="fas fa-download mr-2"></i>
                <small>{{ $depend["dist"]["type"] }}</small>
            </a>
        </div>
    </div>

    <div class="card-body collapse" id="{{ str_replace("/","_", $depend["name"]) }}">
        <div>
            <!-- package description -->
            <p>{{ $depend["description"] ?? ''}}</p>
        </div>
        @if (!empty($depend["authors"]))
        <hr class="hr" />
        <div>
            <h5>{{ __('lpmanager::lpmanager.Authors') }}</h5>
            @foreach ($depend["authors"] as $ath)
            <div>
                <small>
                    <i class="fa fa-user mr-1"></i>
                    {{ $ath["name"] ?? ''}}
                    <a href="mailto:{{ $ath["email"] ?? '' }}">( {{ $ath["email"] ?? ''}} )</a>
                </small>
            </div>
            @endforeach
        </div>
        @endif
        <hr class="hr" />
        <span>
            <i class="fa fa-calendar mr-2"></i> <small>{{ $depend["time"] }}</small>
        </span>
    </div>
</div>
