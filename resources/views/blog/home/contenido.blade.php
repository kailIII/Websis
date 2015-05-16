<div class="container">

    {{-- Buscador --}}
    <div class="row">
        <div class="col-xs-12">
            <div class="input-group"> 
                <input type="text" class="form-control" name="x" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
    
    <br>
    {{-- Posts --}}
    <div class="row">

        <div class="col-xs-12 blog-item">
            <div class="col-xs-12 col-sm-2 text-center">
                <div class="entry-meta">
                    <span id="publish_date">07  NOV</span>
                    <span><i class="fa fa-user"></i> <a href="#">John Doe</a></span>
                    <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                </div>
            </div>
                
            <div class="col-xs-12 col-sm-10 blog-content">
                <a href="#"><img class="img-responsive img-blog" src="../img/blog/blog1.jpg" width="100%" alt="" /></a>
                <h2 class="post-title"> Man must explore, and this is exploration at its greatest </h2>

                <p class="post-subtitle">Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper.</p>

                <a class="btn btn-primary" href="{{ route('post', array(1)) }}">Read More <i class="fa fa-angle-right"></i></a>

            </div>
  
        </div>
    </div>

    <hr>

    <div class="row">            
        <!-- Pager -->
        <ul class="pager">
            <li class="next">
                <a href="#">Anteriores <i class="fa fa-angle-right"></i></a>
            </li>
        </ul>
    </div>
</div>