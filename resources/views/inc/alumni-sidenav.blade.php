<div>
    <a id="admin-link" class="btn btn-secondary" href="/alumni-dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a id="admin-link" class="link2 btn btn-secondary" href="/CreateJob"><i class="fa fa-empire"></i> Post Job</a>
    <a id="admin-link" class="link2 btn btn-secondary" href="/CreateInternship"><i class="fa fa-feed"></i> Post Internship</a>
    <a id="admin-link" class="link2 btn btn-secondary" href="/Messages"><i class="fa fa-envelope"></i> Messages</a>
    <a id="admin-link" class="link2 btn btn-secondary" href="/communications"><i class="fa fa-gg-circle"></i> Communication</a>
    <a title="Create a testimonial" id="admin-link" class="link2 btn btn-secondary" href="/testimonial"><i class="fa fa-address-book"></i> Testimonials</a>

    <!-- <a id="admin-link" class="link2 btn btn-secondary" href="/alumni-Donate"><i class="fa fa-hand-grab-o"></i>&nbsp;Donate</a> -->


    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
        <button id="admin-link" class=" link2 btn btn-secondary"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Logout</button>
    </form>
</div>