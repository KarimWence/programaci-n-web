<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Nutrilife</title>
</head>
<body>
    <?php
        include "../header/header.php";
    ?>
    <section class="page1-content">
        <div class="row" style="width: 100%;">
            <div class="col-3" style="height: 100%;">
              <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                <nav class="nav nav-pills flex-column">
                  <a class="nav-link" href="#item-1">Consejo 1</a>
                  <a class="nav-link" href="#item-2">Consejo 2</a>
                  <a class="nav-link" href="#item-3">Consejo 3</a>
                  <a class="nav-link" href="#item-4">Consejo 4</a>
                  <a class="nav-link" href="#item-5">Consejo 5</a>
                </nav>
              </nav>
            </div>
            <div class="col-9" style="overflow-y: scroll; height: 100%;">
              <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                <div id="item-1">
                  <h4>Cómo Conservar Vegetales Frescos por Más Tiempo</h4>
                  <p>Para mantener tus vegetales frescos por más tiempo, es importante saber cómo almacenarlos correctamente:</p>
                  <ul>
                    <li>Hojas verdes (espinacas, lechuga, acelgas): Lávalas bien y sécalas con una toalla de papel. Luego guárdalas en un recipiente hermético con una toalla de papel en la parte superior e inferior para absorber la humedad.</li>
                    <li>Zanahorias y apio: Guárdalos en agua dentro de un recipiente hermético en el refrigerador. Esto ayuda a mantener su frescura y firmeza.</li>
                </ul>
                </div>
                <div id="item-2">
                  <h4>La Guía Definitiva para Congelar Comidas Saludables</h4>
                  <p>Congelar alimentos es una excelente manera de reducir el desperdicio y tener comidas listas para esos días de prisa. Aquí te dejamos algunas recomendaciones:</p>
                  <ul>
                    <li>Divide tus comidas en porciones antes de congelarlas para que puedas descongelar solo lo que necesitas.</li>
                    <li>Retira el aire de las bolsas antes de cerrarlas para evitar la formación de cristales de hielo que pueden afectar la textura y el sabor de la comida.</li>
                    <li>Etiquetas y fechas: Asegúrate de etiquetar cada bolsa o recipiente con la fecha de congelación. Así sabrás cuánto tiempo lleva en el congelador y evitarás consumir alimentos que ya han pasado su mejor momento.</li>
                </ul>
                </div>
                <div id="item-3">
                  <h4>Sustitutos de Harinas Refinadas para Hornear</h4>
                  <p>Las harinas refinadas pueden sustituirse fácilmente por alternativas más nutritivas:</p>
                  <ul>
                    <li>Harina de almendra: Ideal para recetas bajas en carbohidratos y sin gluten. Tiene un sabor suave que combina bien en galletas, panes y pasteles.</li>
                    <li>Harina de avena: Puedes hacerla en casa moliendo avena en una licuadora. Es rica en fibra y funciona muy bien en muffins y pancakes.</li>
                    <li>Harina de coco: Absorbe más líquido que otras harinas, así que úsala con moderación. Es perfecta para darle un toque dulce a tus recetas.</li>
                </ul>
                </div>
                <div id="item-4">
                    <h4>Alternativas a los Lácteos: Leches Vegetales y Más</h4>
                  <p>Si eres intolerante a la lactosa o buscas opciones más ligeras, las leches vegetales son una excelente alternativa:</p>
                  <ul>
                    <li>Leche de almendra: Ligera y de sabor suave, ideal para smoothies y café. Elige versiones sin azúcar para mantener tus recetas saludables.</li>
                    <li>Leche de coco: Más cremosa y con un toque tropical, es perfecta para currys, postres y preparaciones que necesitan una textura más rica.</li>
                    <li>Leche de avena: Su consistencia espesa la hace una excelente opción para hacer lattes y preparaciones donde necesitas más cuerpo. Además, es naturalmente dulce.</li>
                </ul>
                </div>
                <div id="item-5">
                    <h4>Cómo Incorporar Superalimentos en tus Recetas</h4>
                  <p>Los superalimentos son ricos en nutrientes y pueden mejorar el perfil nutricional de tus comidas diarias. Aquí algunas ideas:</p>
                  <ul>
                    <li>Semillas de chía: Son ricas en omega-3 y fibra. Añádelas a tus smoothies, yogur, o úsalas para hacer pudines.</li>
                    <li>Cúrcuma: Tiene propiedades antiinflamatorias. Agrégala a sopas, guisos y hasta en tu café o té para un golden latte.</li>
                    <li>Cacao puro: Rico en antioxidantes y magnesio. Úsalo en polvo para batidos, postres o incluso para darle un toque especial a tu avena.</li>
                </ul>
                </div>
              </div>
            </div>
          </div>
    </section>
    <?php
        include "../footer/footer.php";
    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>