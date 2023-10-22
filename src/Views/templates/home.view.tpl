<h1>Ofertas del Día</h1>
<hr><br>
    <div class="product-list">
        {{foreach productsOnSale}}
        <div class="product" data-productId="{{productId}}">
            <div class="img">
                <img src="{{img_url}}" alt="{{productName}}">

            </div>
            <h2>{{productName}}</h2>
            <p>{{productDescription}}</p>
            <span class="price">L {{price}}</span><br>
            <button class="add-to-cart">Agregar al Carrito</button>
        </div>
        {{endfor productsOnSale}}
    </div>
    <br><h1>Destacados</h1>
    <hr><br>
    <div class="product-list">
        {{foreach productsHighlighted}}
        <div class="product" data-productId="{{productId}}">
            <div class="img">
                <img src="{{img_url}}" alt="{{productName}}">
            </div>
            <h2>{{productName}}</h2>
            <p>{{productDescription}}</p>
            <span class="price">L {{price}}</span><br>
            <button class="add-to-cart">Agregar al Carrito</button>
        </div>
        {{endfor productsHighlighted}}
    </div>
    <br><h1>Novedades</h1>
    <hr><br>
    <div class="product-list">
        {{foreach productsNew}}
        <div class="product" data-productId="{{productId}}">
            <div class="img">
                <img src="{{img_url}}" alt="{{productName}}">

            </div>
            <h2>{{productName}}</h2>
            <p>{{productDescription}}</p>
            <span class="price">L {{price}}</span><br>
            <button class="add-to-cart">Agregar al Carrito</button>
        </div>
        {{endfor productsNew}}
    </div>