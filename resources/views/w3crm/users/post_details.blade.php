@extends('layouts.default')
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Post Details</a></li>
        </ol>
    </div>
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{asset('/images/profile/profile.png')}}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">Mitchell C. Shay</h4>
                                    <p>UX / UI Designer</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">hello@email.com</h4>
                                    <p>Email</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0">150</h3><span>Follower</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">45</h3><span>Reviews</span>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="javascript:void();;" class="btn btn-primary mb-1 me-1">Follow</a>
                                            <a href="javascript:void();;" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="sendMessageModal">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Send Message</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="comment-form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                                    <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                                    <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3">
                                                                    <label class="text-black font-w600 form-label">Comment</label>
                                                                    <textarea rows="4" class="form-control h-50" name="comment" placeholder="Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="mb-3 mb-0">
                                                                    <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-blog">
                                    <h5 class="text-primary d-inline">Today Highlights</h5>
                                    <img src="{{asset('/images/profile/1.jpg')}}" alt="" class="img-fluid mt-4 mb-4 w-100 rounded">
                                    <h4><a href="{{ url('post-details') }}" class="text-black">Darwin Creative Agency Theme</a></h4>
                                    <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-interest">
                                    <h5 class="text-primary d-inline">Interest</h5>
                                    <div class="row mt-4 sp4" id="lightgallery">
                                        <a href="{{asset('/images/profile/2.jpg')}}" data-exthumbimage="{{asset('/images/profile/2.jpg')}}" data-src="{{asset('/images/profile/2.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="{{asset('/images/profile/2.jpg')}}" alt="" class="img-fluid rounded">
                                        </a>
                                        <a href="{{asset('/images/profile/3.jpg')}}" data-exthumbimage="{{asset('/images/profile/3.jpg')}}" data-src="{{asset('/images/profile/3.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="{{asset('/images/profile/3.jpg')}}" alt="" class="img-fluid rounded">
                                        </a>
                                        <a href="{{asset('/images/profile/4.jpg')}}" data-exthumbimage="{{asset('/images/profile/4.jpg')}}" data-src="{{asset('/images/profile/4.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="{{asset('/images/profile/4.jpg')}}" alt="" class="img-fluid rounded">
                                        </a>
                                        <a href="{{asset('/images/profile/3.jpg')}}" data-exthumbimage="{{asset('/images/profile/3.jpg')}}" data-src="{{asset('/images/profile/3.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="{{asset('/images/profile/3.jpg')}}" alt="" class="img-fluid rounded">
                                        </a>
                                        <a href="{{asset('/images/profile/4.jpg')}}" data-exthumbimage="{{asset('/images/profile/4.jpg')}}" data-src="{{asset('/images/profile/4.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="{{asset('/images/profile/4.jpg')}}" alt="" class="img-fluid rounded">
                                        </a>
                                        <a href="{{asset('/images/profile/2.jpg')}}" data-exthumbimage="{{asset('/images/profile/2.jpg')}}" data-src="{{asset('/images/profile/2.jpg')}}" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
                                            <img src="{{asset('/images/profile/2.jpg')}}" alt="" class="img-fluid rounded">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-news">
                                    <h5 class="text-primary d-inline">Our Latest News</h5>
                                    <div class="media pt-3 pb-3">
                                        <img src="{{asset('/images/profile/5.jpg')}}" alt="image" class="me-3 rounded" width="75">
                                        <div class="media-body">
                                            <h5 class="m-b-5"><a href="{{ url('post-details') }}" class="text-black">Collection of textile samples</a></h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="{{asset('/images/profile/6.jpg')}}" alt="image" class="me-3 rounded" width="75">
                                        <div class="media-body">
                                            <h5 class="m-b-5"><a href="{{ url('post-details') }}" class="text-black">Collection of textile samples</a></h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                        </div>
                                    </div>
                                    <div class="media pt-3 pb-3">
                                        <img src="{{asset('/images/profile/7.jpg')}}" alt="image" class="me-3 rounded" width="75">
                                        <div class="media-body">
                                            <h5 class="m-b-5"><a href="{{ url('post-details') }}" class="text-black">Collection of textile samples</a></h5>
                                            <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="post-details">
                            <h3 class="mb-2 text-black">Collection of textile samples lay spread</h3>
                            <ul class="mb-4 post-meta d-flex flex-wrap">
                                <li class="post-author me-3">By Admin</li>
                                <li class="post-date me-3"><i class="far fa-calendar-plus me-2"></i>18 Nov 2020</li>
                                <li class="post-comment"><i class="far fa-comment me-2"></i>28</li>
                            </ul>
                            <img src="{{asset('/images/profile/8.jpg')}}" alt="" class="img-fluid mb-3 w-100 rounded">
                            <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.</p>
                            <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                            <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
                            <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                            <div class="profile-skills mt-5 mb-5">
                                <h4 class="text-primary mb-2">Skills</h4>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                <a href="javascript:void();;" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                            </div>
                            <div class="comment-respond" id="respond">
                                <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Leave a Reply </h4>
                                <form class="comment-form" id="commentform" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="author" class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" value="Author" name="Author" placeholder="Author" id="author">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="email" class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                <input type="text" class="form-control" value="Email" placeholder="Email" name="Email" id="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="comment" class="text-black font-w600 form-label">Comment</label>
                                                <textarea rows="6" class="form-control h-100" name="comment" placeholder="Comment" id="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <input type="submit" value="Post Comment" class="submit btn btn-primary" id="submit" name="submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
