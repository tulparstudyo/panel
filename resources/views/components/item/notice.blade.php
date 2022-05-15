@if ($errors->any())
    <div class="div mt-4" {{ $attributes }}>
            @foreach ($errors->all() as $error)
                <p class="text-sm mb-0"><i class="material-icons text-danger text-sm ">check</i> {{ $error }}</p>
            @endforeach
    </div>
@endif
