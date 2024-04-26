@extends('layout.layout')
@section('body')



    <div class="container_12">
        <div class="grid_12">
        </div>
    </div>
    </div>
    <div class="gray_block gb1">
        <div class="container_12">
            <div class="grid_12">
                <div class="map">
                    <figure class="">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.953208188769!2d106.6808738528469!3d10.792052662167821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529658f3e45e9%3A0x35bc16eba2db9a6f!2sChung%20c%C6%B0%20Novaland!5e0!3m2!1svi!2s!4v1714009806850!5m2!1svi!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </figure>
                </div>
            </div>
            <div class="grid_4">
                <h2 class="head1">Địa chỉ</h2>
                <div class="map">
                    <address>
                        <dl>
                            <dt>
                                17-19-21 Nguyễn Văn Trỗi, <br>
                                Phường 14, Quận 3,<br>
                                Thành phố Hồ Chí Minh.
                            </dt>
                            <dd><span>Telephone:</span>+1 800 603 6035</dd>
                            <dd><span>FAX:</span>+1 800 889 9898</dd>
                            <dd><span>E-mail:</span> <a href="#" class="col3">mail@demolink.org</a></dd>
                            <dd><span>Skype:</span> <a href="#" class="col3">@skypename</a></dd>
                        </dl>
                    </address>
                    <p>24/7 support is available for all <span class="col3"><a
                                href="http://www.templatemonster.com/website-templates.php"
                                rel="nofollow">premium</a></span> products from TemplateMonster. Free stuff goes without it.
                    </p>
                    Have any questions about customization of a free template? Address to <span class="col3"><a
                            href="http://www.templatetuning.com/" rel="nofollow">TemplateTuning</a></span>.
                </div>
            </div>
            <div class="grid_8">
                <h2 class="head1">Biểu mẫu liên hệ</h2>

                <div class="justify-content-center">
                    <form action="{{ route('Storecontact') }}" class="bg-white p-5 " method="Post">
                        @csrf
                        <div class="form-group{{ $errors->has('ht') ? ' has-danger' : '' }}">
                            <input required type="text" name="ht" class="form-control" placeholder="Your Name *"
                                value="{{ old('ht') }}" maxlength="50" required />
                            @if ($errors->has('ht'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('ht') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('em') ? ' has-danger' : '' }}">
                            <input required type="email" value="{{ old('em') }}"class="form-control" name="em"
                                placeholder="Your Email *" required>
                            @if ($errors->has('em'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('em') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('td') ? ' has-danger' : '' }}">
                            <input type="text" name="td" value="{{ old('td') }}" class="form-control"
                                maxlength="50" minlength="15" placeholder="Title *" required>
                            @if ($errors->has('td'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('td') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('nd') ? ' has-danger' : '' }}">
                            <textarea name="nd" id="" cols="30" rows="7" class="form-control" minlength="50"
                                placeholder="Nội dung" required>{{ old('nd') }}</textarea>
                            @if ($errors->has('nd'))
                                <span class="invalid-feedback" style="display: block;font-size:15px" role="alert">
                                    {{ $errors->first('nd') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send Message" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
