 
  @extends ('layouts.app')
  @section ('content')
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
          @foreach($posts as $post)
            <!-- Title -->
            <h1 class="mt-4">{{$post->title}}</h1>
            <!-- Author -->
            <p class="lead">
              by
              <a href="#">{{$post->user->name}}</a>
            </p>
            <hr>
            <!-- Date/Time -->
            <p>Posted on {{$post->published_at}}</p>
            <hr>
            <!-- Preview Image -->
            @if($post->image)       
              <img class="img-fluid rounded" src="{{$post->image}}" alt="">
              <hr>
            @else
              <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
              <hr>
            @endif
            
            <!-- Post Content -->
            <p class="lead">{{$post->excerpt}}</p>
            <blockquote class="blockquote">
              <p class="mb-0">blockquote ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in
                <cite title="Source Title">Source Title</cite>
              </footer>
            </blockquote>
            <p>{{$post->body}}</p>
            <hr>
          @endforeach
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        
        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    

</body>

</html>
