<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <title>Nutrilife</title>
</head>
<body>
    <?php
        include "header/header.php";
    ?>
    <section class="slide-container">
        <div class="slider-wrapper">
            <div class="slider">
                <div class="slides-container" id="slide-1">
                    <img src="https://www.gutmicrobiotaforhealth.com/wp-content/uploads/2020/07/Nutrition-1200x654.jpg" alt="">
                    <div class="description-container">
                        <h3>
                            Tendencias en Alimentación Saludable para 2024
                        </h3>
                        <p>
                            Descubre las últimas tendencias en alimentación saludable, desde el auge de las dietas basadas en plantas hasta nuevos superalimentos que debes probar este año.
                        </p>
                    </div>
                </div>
                <div class="slides-container" id="slide-2">
                    <img src="https://eu-central-1.linodeobjects.com/tecnohotelnews/2022/12/2MdTZZdX-siete-claves-para-ofrecer-platos-saludables-atractivos-a-los-comensales.jpg" alt="">
                    <div class="description-container">
                        <h3>
                            Cómo Crear un Plato Balanceado
                        </h3>
                        <p>
                            Una guía paso a paso para asegurarte de que tus comidas diarias incluyan todos los nutrientes esenciales.
                        </p>
                    </div>
                </div>
                <div class="slides-container" id="slide-3">
                    <img src="https://youtalkonline.com/wp-content/uploads/comidas-festivas-americanas.jpg.webp" alt="">
                    <div class="description-container">
                        <h3>
                            Cómo Mantener una Alimentación Saludable durante las Vacaciones
                        </h3>
                        <p>
                            Consejos prácticos para disfrutar de las comidas festivas sin comprometer tus objetivos de salud.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-nav">
            <a href="#slide-1"></a>
            <a href="#slide-2"></a>
            <a href="#slide-3"></a>
        </div>
    </section>
    <section class="cards-container">
        <div class="cell">
            <div class="card">
                <div class="content">
                    <div class="div-back-image">
                        <img src="img/card1.jpg" alt="" srcset="">
                    </div>
                    <h4 class="title">Superalimentos que Deberías Incluir en Tu Dieta</h4>
                    <p class="description">Un recorrido por los superalimentos más nutritivos, desde las semillas de chía hasta la espirulina, y cómo incorporarlos en tus comidas diarias.</p>
                    <div class="button-container">
                        <button class="show-more-button" type="button">Ver mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="card">
                <div class="content">
                    <div class="div-back-image">
                        <img src="img/card2.jpg" alt="" srcset="">
                    </div>
                    <h4 class="title">El Futuro de la Alimentación: ¿Qué son los Alimentos Funcionales?</h4>
                    <p class="description">Explicación de qué son los alimentos funcionales, sus beneficios para la salud y ejemplos de cómo puedes integrarlos en tu dieta.</p>
                    <div class="button-container">
                        <button class="show-more-button" type="button">Ver mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="card">
                <div class="content">
                    <div class="div-back-image">
                        <img src="img/card3.png" alt="" srcset="">
                    </div>
                    <h4 class="title">Cómo Leer Etiquetas Nutricionales: Lo que Necesitas Saber</h4>
                    <p class="description">Una guía sencilla para entender mejor las etiquetas de los alimentos y tomar decisiones informadas en el supermercado.</p>
                    <div class="button-container">
                        <button class="show-more-button" type="button">Ver mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="card">
                <div class="content">
                    <div class="div-back-image">
                        <img src="img/card4.jpg" alt="" srcset="">
                    </div>
                    <h4 class="title">Recetas Fáciles con 5 Ingredientes o Menos</h4>
                    <p class="description">Recetas rápidas y sencillas que requieren pocos ingredientes pero ofrecen mucho sabor y nutrientes.</p>
                    <div class="button-container">
                        <button class="show-more-button" type="button">Ver mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="card">
                <div class="content">
                    <div class="div-back-image">
                        <img src="img/card5.jpg" alt="" srcset="">
                    </div>
                    <h4 class="title">Cómo Comer Saludable con un Presupuesto Ajustado</h4>
                    <p class="description">Estrategias para mantener una dieta nutritiva sin gastar mucho dinero, con ejemplos de alimentos económicos y recetas asequibles.</p>
                    <div class="button-container">
                        <button class="show-more-button" type="button">Ver mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cell">
            <div class="card">
                <div class="content">
                    <div class="div-back-image">
                        <img src="img/card6.jpg" alt="" srcset="">
                    </div>
                    <h4 class="title">Cómo una Dieta Saludable Ayudó a Recuperar mi Energía</h4>
                    <p class="description">Una historia personal sobre cómo cambiar los hábitos alimenticios tuvo un impacto positivo en la energía y bienestar general.</p>
                    <div class="button-container">
                        <button class="show-more-button" type="button">Ver mas</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include "footer/footer.php";
    ?>
</body>
</html>