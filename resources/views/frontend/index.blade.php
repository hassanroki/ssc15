@extends('frontend.layouts.master')

@section('title', 'SSC Batch 2015/Home')

@section('content')

{{-- frontend.layouts.banner --}}

{{-- Banner File --}}
@include('frontend.layouts.banner')

{{-- Cebration --}}
@include('frontend.template.celebrationTemplate')

    {{-- History Section Start --}}
    <div class="history">
        <div class="container">
            <div class="row d-flex align-items-center">
                <h2 data-aos="fade-left">ABOUT RASULPUR MAHTABIA SCHOOL & COLLEGE</h2>
                <div class="col-md-8">
                    <h4 data-aos="fade-right">প্রতিষ্ঠানের ইতিহাসঃ</h4>
                    <p data-aos="flip-left">অত্র এলাকার শিক্ষানুরাগী ও সুধীবৃন্দের সাহায্য ও সহোযোগিতায় এলাকার জনসাধারনের শিক্ষার প্রসার এর লক্ষ্যে অত্র এলাকার জমিদার পরিবারের<span id="dots">...</span><span id="readMore"> কৃতি সন্তান মরহুম মুহাম্মদ হোসেন খাঁন চৌধুরী রসুলপুর জুনিয়র মাদ্রাসা প্রতিষ্ঠা করেন। পরবর্তীতে প্রতিষ্ঠাতা মরহুম মুহাম্মদ হোসেন খাঁন চৌধুরী রসুলপুর জুনিয়র মাদ্রাসাটি তৎকালীন এক সরকারী কর্মকর্তার সহোযোগিতায় মাদ্রাসাটিকে সরাসরি মাধ্যমিক বিদ্যালয়ে রুপান্তর করার ফলে ১৯৬৭ ইং সালের ১লা জানুয়ারী হতে “রসুলপুর মাহতাবিয়া উচ্চ বিদ্যালয়” নামে প্রতিষ্ঠিত হয় এবং শিক্ষা প্রতিষ্ঠানটি ০১/০৭/১৯৬৮ ইং সালে স্বীকৃতি নিয়ে ০১/০১/১৯৮৫ সালে এম.পি.ও ভুক্ত হয়। পরবর্তীতে ইহা ২৫/০৫/২০১৫ সালে কলেজ শাখার পাঠ দানের অনুমোদন নিয়ে “রসুলপুর মাহতাবিয়া দ্বি-মুখী স্কুল এন্ড কলেজ” নামে পরিচিতি লাভ করে এবং মাথা উচু করে শিক্ষার প্রসার ঘটিয়ে আসছে। এছাড়াও দারিদ্র ও মেধাবী ছেলে-মেয়েরা অত্র শিক্ষা প্রতিষ্ঠানে বিনা বেতনে লেখা পড়া করার সুযোগ পাচ্ছে। ৭ম শ্রেনী হতে ১০ম শ্রেণী পর্যন্ত বার্ষিক পরীক্ষার ফলাফলের উপর প্রতি বছর মেধাবৃত্তি প্রদান করা হয়। শিক্ষা প্রতিষ্ঠানের জে.এস.সি, এস.এস.সি ও এইচ.এস.সি পরীক্ষার ফলাফল সন্তোষ জনক।</span></p>
                    <button onclick="myFunction()" id="readContent" class="btn mb-3 border-primary">Read more</button>


                    <h4 data-aos="fade-right">প্রতিষ্ঠা কালঃ</h4>
                    <p data-aos="fade-right">স্কুল শাখা প্রতিষ্ঠার তারিখ- ০১/০১/১৯৬৭ ইং<br>

                        কলেজ শাখা প্রতিষ্ঠার তারিখ- ২৫/০৫/২০১৫ইং</p>
                    <h4 data-aos="fade-left">প্রতিষ্ঠাতাঃ</h4>
                    <p data-aos="fade-left">মরহুম মুহাম্মদ হোসেন খাঁন চৌধুরী</p>
                    <h4 data-aos="fade-right">যোগাযোগঃ</h4>
                    <p data-aos="flip-right">রসুলপুর মাহতাবিয়া দ্বি-মুখী স্কুল এন্ড কলেজটি রংপুর জেলার পীরগঞ্জ উপজেলার ৪নং কুমেদপুর ইউনিয়নের বড়রসুলপুর গ্রামে অবস্থিত। প্রতিষ্ঠানটি পীরগঞ্জ উপজেলা সদর থেকে ১২ কিলোমিটার উত্তর পশ্চিমে অবস্থিত। বড় দরগাহ হাইওয়ে থেকে ৮ কিলোমিটার দক্ষিন পশ্চিমে এবং ভেন্ডাবাড়ী হাট থেকে ৬কিলোমিটার দক্ষিনে অবস্থিত। এখানে বাস, টেম্পু, রিক্সা, মোটর সাইকেল, মাইক্রোবাস, অটোরিক্সাসহ নানা প্রকার পরিবহনে খুব সহজে যাতায়াত করা যায় । এখানে আসা এবং যাওয়ার মেইন রাস্তাগুলো সবই পাকাঁ ।</p>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-down">
                    <img src="{{ asset('frontend/images/history-01.png') }}" alt="history-01" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    {{-- History Section End --}}

    {{-- Important Date Start --}}
    <div class="important">
        <div class="container">
            <div class="row">
                <h2 data-aos="flip-left">Important Date</h2>
                <div class="col-md-4" data-aos="fade-right">
                    <h4>Registration Starts</h4>
                    <p>22 January 2025</p>
                </div>
                <div class="col-md-4" data-aos="flip-left">
                    <h4>Registration Ends</h4>
                    <p>17 February 2025</p>
                </div>
                <div class="col-md-4" data-aos="fade-left">
                    <h4>Reunion date</h4>
                    <p>09 or 10 March 2025</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Important Date End --}}

    {{-- Student List File Connect --}}
    @include('frontend.template.studentsListTemplate')


    {{-- Gallery Template Include --}}
    @include('frontend.template.galleryTemplate')


    {{-- Contact Templat Include --}}
    @include('frontend.template.contactTemplate')


{{-- Typed JavaScript --}}
<script src="{{ asset('frontend/js/typed.js') }}"></script>    

@endsection