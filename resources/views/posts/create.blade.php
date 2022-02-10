@extends("layouts.crudLayout")

@section("content")

    <div class="container-sm px-md-5">

        <form action="{{route("posts.store")}}" method="POST" class="container" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">@lang("Title")</label>
                <input id="title" name="title" type="text" class="form-control"">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">@lang("Summary")</label>
                <input id="summary" name="summary" type="text" class="form-control"  >
            </div>

            <div class="mb-3">
                <label for="" class="form-label">@lang("Description")</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <p class="text-primary fs-5">@lang("Options")</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="expired" name="expired">
                    <label class="form-check-label" for="">
                        @lang("Expired")
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="commentable" name="commentable">
                    <label class="form-check-label" for="">
                        @lang("Commentable")
                    </label>
                </div>
            </div>

            <select class="form-select" aria-label="Default select example">
                <option selected>Access</option>
                <option value="1">Private</option>
                <option value="2">Public</option>
            </select>

            <div class="mb-3">
                <label for="" class="form-label">@lang("Date publication")</label>
                <input id="date_publication" name="date_publication" type="date" class="form-control" >
            </div>

            <div class="mt-4">
                <a href="{{route("posts.index")}}" class="btn btn-secondary ">@lang("Cancel")</a>
                <button type="submit" class="btn btn-primary">@lang("Save")</button>
            </div>

        </form>
    </div>

@endsection
