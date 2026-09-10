@extends('admin.layout.app')

@section('title', 'Add New Video')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="row">
        <div class="col-12">

            <div class="d-flex align-items-center justify-content-between mb-4">

                <div>
                    <h4 class="mb-1">Add New Video</h4>

                    <p class="mb-0 text-secondary">
                        Add a new video to your website.
                    </p>
                </div>

                <div>
                    <a
                        href="{{ route('admin.videos.index') }}"
                        class="btn btn-light"
                    >
                        <i class="material-icons-outlined align-middle me-1">
                            arrow_back
                        </i>
                        Back to Videos
                    </a>
                </div>

            </div>

        </div>
    </div>


    <!-- Validation Errors -->
    @if($errors->any())

        <div class="row">
            <div class="col-12">

                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >

                    <strong>Please fix the following errors:</strong>

                    <ul class="mb-0 mt-2">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>

                </div>

            </div>
        </div>

    @endif


    <!-- Add Video Form -->
    <div class="row">

        <div class="col-12 col-xl-8">

            <div class="card">

                <div class="card-body p-4">

                    <div class="mb-4">

                        <h5 class="mb-1">
                            Video Information
                        </h5>

                        <p class="text-secondary mb-0">
                            Enter the details of your YouTube video.
                        </p>

                    </div>


                    <form
                        action="{{ route('admin.videos.store') }}"
                        method="POST"
                    >

                        @csrf


                        <div class="row g-4">

                            <!-- Video Title -->
                            <div class="col-12">

                                <label
                                    for="videoTitle"
                                    class="form-label"
                                >
                                    Video Title
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    id="videoTitle"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}"
                                    placeholder="Enter video title"
                                    required
                                >

                                @error('title')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <!-- YouTube URL -->
                            <div class="col-12">

                                <label
                                    for="youtubeUrl"
                                    class="form-label"
                                >
                                    YouTube Video URL
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="youtube_url"
                                    id="youtubeUrl"
                                    class="form-control @error('youtube_url') is-invalid @enderror"
                                    value="{{ old('youtube_url') }}"
                                    placeholder="https://www.youtube.com/watch?v=example"
                                    required
                                >

                                @error('youtube_url')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                                <div class="form-text">
                                    Paste the complete YouTube video URL.
                                </div>

                            </div>


                            <!-- Description -->
                            <div class="col-12">

                                <label
                                    for="videoDescription"
                                    class="form-label"
                                >
                                    Description
                                    <span class="text-secondary">
                                        (Optional)
                                    </span>
                                </label>

                                <textarea
                                    name="description"
                                    id="videoDescription"
                                    rows="5"
                                    class="form-control @error('description') is-invalid @enderror"
                                    placeholder="Enter a short description about this video..."
                                >{{ old('description') }}</textarea>

                                @error('description')

                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <!-- Active Status -->
                            <div class="col-12">

                                <div class="form-check">

                                    <input
                                        type="checkbox"
                                        name="is_active"
                                        value="1"
                                        id="videoStatus"
                                        class="form-check-input"
                                        {{ old('is_active', true) ? 'checked' : '' }}
                                    >

                                    <label
                                        class="form-check-label"
                                        for="videoStatus"
                                    >
                                        Publish as Active Immediately
                                    </label>

                                </div>

                            </div>


                            <!-- Buttons -->
                            <div class="col-12">

                                <div class="d-flex gap-2">

                                    <button
                                        type="submit"
                                        class="btn btn-primary px-4"
                                    >
                                        <i class="material-icons-outlined align-middle me-1">
                                            save
                                        </i>
                                        Save Video
                                    </button>

                                    <a
                                        href="{{ route('admin.videos.index') }}"
                                        class="btn btn-light px-4"
                                    >
                                        Cancel
                                    </a>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>


        <!-- Information Card -->
        <div class="col-12 col-xl-4">

            <div class="card">

                <div class="card-body p-4">

                    <h5 class="mb-3">
                        Video Guidelines
                    </h5>

                    <div class="d-flex align-items-start mb-3">

                        <i class="material-icons-outlined text-primary me-3">
                            title
                        </i>

                        <div>
                            <h6 class="mb-1">
                                Video Title
                            </h6>

                            <p class="text-secondary small mb-0">
                                Use a clear and meaningful title for the video.
                            </p>
                        </div>

                    </div>


                    <div class="d-flex align-items-start mb-3">

                        <i class="material-icons-outlined text-primary me-3">
                            link
                        </i>

                        <div>
                            <h6 class="mb-1">
                                YouTube URL
                            </h6>

                            <p class="text-secondary small mb-0">
                                Add a valid YouTube video URL.
                            </p>
                        </div>

                    </div>


                    <div class="d-flex align-items-start">

                        <i class="material-icons-outlined text-primary me-3">
                            visibility
                        </i>

                        <div>
                            <h6 class="mb-1">
                                Video Status
                            </h6>

                            <p class="text-secondary small mb-0">
                                Active videos will be available on the website.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection