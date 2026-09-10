@extends('admin.layout.app')

@section('title', 'Videos')

@section('content')

<div class="page-wrapper">
    <div class="page-content">

        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between mb-4">

            <div>
                <h4 class="mb-1">Videos</h4>
                <p class="mb-0 text-secondary">
                    Manage all your videos from here.
                </p>
            </div>

            <div>
                <a
                    href="{{ route('admin.videos.create') }}"
                    class="btn btn-primary"
                >
                    <i class="material-icons-outlined align-middle me-1">
                        add
                    </i>
                    Add New Video
                </a>
            </div>

        </div>


        <!-- Success Message -->
        @if(session('success'))

            <div
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            </div>

        @endif


        <!-- Validation Errors -->
        @if($errors->any())

            <div
                class="alert alert-danger alert-dismissible fade show"
                role="alert"
            >

                <ul class="mb-0">

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

        @endif


        <!-- Videos Card -->
        <div class="card">

            <div class="card-body">

                <!-- Card Header -->
                <div class="d-flex align-items-center justify-content-between mb-3">

                    <h5 class="mb-0">
                        All Videos
                    </h5>

                    <span class="badge bg-primary">
                        {{ $videos->count() }}
                        {{ $videos->count() == 1 ? 'Video' : 'Videos' }}
                    </span>

                </div>


                @if($videos->count() > 0)

                    <div class="table-responsive">

                        <table class="table align-middle mb-0">

                            <thead class="table-light">

                                <tr>

                                    <th width="70">
                                        #
                                    </th>

                                    <th>
                                        Video
                                    </th>

                                    <th>
                                        YouTube URL
                                    </th>

                                    <th width="130">
                                        Status
                                    </th>

                                    <th width="180">
                                        Actions
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach($videos as $index => $video)

                                    <tr>

                                        <!-- Serial Number -->
                                        <td>
                                            {{ $index + 1 }}
                                        </td>


                                        <!-- Video Information -->
                                        <td>

                                            <div class="d-flex align-items-center">

                                                <div
                                                    class="bg-light rounded-3 d-flex align-items-center justify-content-center me-3"
                                                    style="width: 55px; height: 55px;"
                                                >
                                                    <i
                                                        class="material-icons-outlined text-primary"
                                                    >
                                                        play_circle
                                                    </i>
                                                </div>

                                                <div>

                                                    <h6 class="mb-1">
                                                        {{ $video->title }}
                                                    </h6>

                                                    @if($video->description)

                                                        <p class="mb-0 text-secondary small">
                                                            {{ \Illuminate\Support\Str::limit($video->description, 60) }}
                                                        </p>

                                                    @endif

                                                </div>

                                            </div>

                                        </td>


                                        <!-- YouTube URL -->
                                        <td>

                                            <a
                                                href="{{ $video->youtube_url }}"
                                                target="_blank"
                                                class="text-primary"
                                            >
                                                {{ \Illuminate\Support\Str::limit($video->youtube_url, 40) }}
                                            </a>

                                        </td>


                                        <!-- Status -->
                                        <td>

                                            @if($video->is_active)

                                                <span class="badge bg-success">
                                                    Active
                                                </span>

                                            @else

                                                <span class="badge bg-secondary">
                                                    Inactive
                                                </span>

                                            @endif

                                        </td>


                                        <!-- Actions -->
                                        <td>

                                            <div class="d-flex align-items-center gap-2">

                                                <!-- Edit -->
                                                <a
                                                    href="{{ route('admin.videos.edit', $video) }}"
                                                    class="btn btn-sm btn-outline-primary"
                                                    title="Edit Video"
                                                >
                                                    <i class="material-icons-outlined fs-6">
                                                        edit
                                                    </i>
                                                </a>


                                                <!-- Status -->
                                                <form
                                                    action="{{ route('admin.videos.status', $video) }}"
                                                    method="POST"
                                                >

                                                    @csrf
                                                    @method('PATCH')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-outline-warning"
                                                        title="{{ $video->is_active ? 'Deactivate' : 'Activate' }}"
                                                    >

                                                        <i class="material-icons-outlined fs-6">
                                                            {{ $video->is_active ? 'visibility_off' : 'visibility' }}
                                                        </i>

                                                    </button>

                                                </form>


                                                <!-- Delete -->
                                                <form
                                                    action="{{ route('admin.videos.destroy', $video) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this video?');"
                                                >

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-outline-danger"
                                                        title="Delete Video"
                                                    >

                                                        <i class="material-icons-outlined fs-6">
                                                            delete
                                                        </i>

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <!-- Empty State -->
                    <div class="text-center py-5">

                        <div class="mb-3">

                            <i
                                class="material-icons-outlined text-secondary"
                                style="font-size: 60px;"
                            >
                                videocam_off
                            </i>

                        </div>

                        <h5>
                            No Videos Found
                        </h5>

                        <p class="text-secondary mb-4">
                            You haven't added any videos yet.
                        </p>

                        <a
                            href="{{ route('admin.videos.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="material-icons-outlined align-middle me-1">
                                add
                            </i>
                            Add Your First Video
                        </a>

                    </div>

                @endif

            </div>

        </div>

    </div>
</div>

@endsection