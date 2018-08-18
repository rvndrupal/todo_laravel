<div class="row">
        <div class="col-md-4">
          <div class="ticat">Categorías</div>
          <ul>
            @foreach ($categories as $categorie )
            <li><a href="{{ route('detalle.category',$categorie->name) }}">{{ $categorie->name }} </a>
              <span class="badge">{{ $categorie->articles->count() }}</span>
            </li>
                    
            @endforeach
          </ul>
         
        </div>

        
        <div class="col-md-4">
          <div class="titag">Etíquetas</div>
          <ul>
            @foreach ($tags as $tag)
                
            <li><a href="{{ route('detalle.tag',$tag->name) }}">{{ $tag->name }}</a>
                <span class="badge">{{ $tag->articles->count() }}</span>  
            </li>     

            @endforeach
          </ul>
        </div>


       
        
</div>