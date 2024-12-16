<!-- Small boxes (Stat box) -->
<div class="row" style="margin-top: 20px">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $books }}</h3>
                <p>Buku</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="{{ url('book') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box for gallery -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ $galeri }}</h3>
                <p>Galeri</p>
            </div>
            <div class="icon">
                <i class="fa fa-image"></i>
            </div>
            <a href="{{ url('galeris') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $categories }}</h3>
                <p>Kategori Buku</p>
            </div>
            <div class="icon">
                <i class="fa fa-list"></i>
            </div>
            <a href="{{ url('kategory') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-purple">
            <div class="inner">
                <h3>{{ $kategori_galeri }}</h3>
                <p>Kategori Galeri</p>
            </div>
            <div class="icon">
                <i class="fa fa-images"></i>
            </div>
            <a href="{{ url('category-gallery') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $anggota }}</h3>
                <p>Anggota</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="{{ url('anggota') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $comment }}</h3>
                <p>Review</p>
            </div>
            <div class="icon">
                <i class="fa fa-bookmark"></i>
            </div>
            <a href="{{ url('review') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<!-- /.row -->
</div>
