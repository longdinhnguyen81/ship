<div class="col-lg-4 col-md-12 col-xs-12">
        <div class="blog-sidebar">
          <div class="widget search-widget">
            <h3>Tìn kiếm tin tức</h3>
            <form action="{{ route('ship.blog.search') }}" method="get">
              <div>
                <input type="text" class="form-control" placeholder="Tìm kiếm tin tức.." name="name">
                <button type="submit"><i class="ti-search"></i></button>
              </div>
            </form>
          </div>
          <div class="widget category-widget">
            <h3>Danh mục tin</h3>
            <ul>
              @foreach($categorys as $cat)
              <li><a href="{{ route('ship.blog.blog', str_slug($cat->name)) }}">{{ $cat->name }} <span>({{ $cat->detail->count() }})</span></a></li>
              @endforeach
            </ul>
          </div>
          <div class="widget recent-post-widget">
            <h3>Tin tức mới nhất</h3>
            <div class="posts">
              @foreach($newcategorys as $cat)
              <div class="post">
                <div class="img-holder"> <img style="width: 100px;height: 50px" src="/upload/{{ $cat->picture }}" alt="{{ $cat->picture }}"> </div>
                <div class="details">
                  <h4><a href="{{ route('ship.blog.blog', str_slug($cat->name)) }}">{{ $cat->title }}</a></h4>
                  <span class="date">{{ $cat->created_at }}</span> </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="widget tag-widget">
            <h3>Tags phổ biến</h3>
            <ul>
              <li><a href="#">Consulting</a></li>
              <li><a href="#">Analysis</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Corporate</a></li>
            </ul>
          </div>
        </div>
      </div>