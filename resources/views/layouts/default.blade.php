<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>

<!--begin header -->
@include('includes.header')
<!--end header -->

<!--begin home section -->
@include('includes.sections.home')
<!--end home section -->

<!--begin partners-section-->
{{--@include('includes.sections.partners')--}}
<!--end partners-section-->

<!--begin section-grey -->
@include('includes.sections.problem')
<!--end section-grey -->

<!--begin section-white -->
@include('includes.sections.solution')
<!--end section-white-->

<!--begin section-grey -->
@include('includes.sections.pilot-program')
<!--end section-grey-->

<!--begin section-white -->
@include('includes.sections.whyus')
<!--end section-white-->

<!--begin section-bg-2 -->
{{--@include('includes.sections.contact')--}}
<!--end section-bg-2 -->

<!--begin footer -->
@include('includes.footer')
<!--end footer -->

<!-- Load JS here for greater good =============================-->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo-min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.nav.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
