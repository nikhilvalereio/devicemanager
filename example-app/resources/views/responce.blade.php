{{-- return redirect()->back()->with('message', 'Saved'); --}}
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif
@if($errors->any())
         @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
@endif


@if (Session::has('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ Session::get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>


    {{ Session()->forget('success'); }}


@endif


