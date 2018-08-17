<div class="row">
        <div class="col-md-6">
          <div class="ticat">Categorías</div>
          <ul>
            @foreach ($categories as $categorie )
            <li>{{ $categorie->name }} 
              <span class="badge">{{ $categorie->articles->count() }}</span>
            </li>
                    
            @endforeach
          </ul>
        </div>
        <div class="col-md-6">
          <div class="titag">Etíquetas</div>
          <ul>
            @foreach ($tags as $tag)
                
            <li>{{ $tag->name }}
                <span class="badge">{{ $tag->articles->count() }}</span>  
            </li>     

            @endforeach
          </ul>
        </div>
      </div>