<footer>
        <input type="checkbox" name="check-form" id="check-form">
        <div class="top-container">
            <div class="left-container">
                <img src="../img/logo-no-background.png" alt="logo">
                <p>&copy; 2024 NutriLife All Rights Reserved</p>
            </div>
            <div class="right-container">
                <a href="#">
                    <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i>
                </a>
                <a href="#">
                    <label for="check-form">Contáctanos</label>
                </a>
            </div>
        </div>
        <div class="bottom-container">
            <form action="/submit" method="post">
                <h2>Contáctate con nosotros</h2>
                <label for="name">
                    <p>Nombre</p>
                    <input type="text" placeholder="Ingresa tu nombre..." class="input-text"
                        required>
                </label>
                <label for="email">
                    <p>Email</p>
                    <input type="text" placeholder="Ingresa tu email..." class="input-text"
                        required>
                </label>
                <label for="phone-number">
                    <p>Número telefónico</p>
                    <input type="text" placeholder="Número celular..." class="input-text">
                </label>
                <label for="textarea">
                    <p>Comentarios</p>
                    <textarea name="comentarios" id="textarea" rols="10" cols="50"
                        placeholder="Ingresa tus comentarios aquí..."></textarea>
                </label>
                <label for="countries">
                    <p>País de origen</p>
                    <select name="country" id="contries">
                        <optgroup label="América">
                            <option value="mex">México</option>
                            <option value="usa">USA</option>
                            <option value="arg">Argentina</option>
                            <option value="brz">Brazil</option>
                            <option value="bol">Bolivia</option>
                        </optgroup>
                        <optgroup label="Europa">
                            <option value="mex">España</option>
                            <option value="usa">Inglaterra</option>
                            <option value="arg">Francia</option>
                            <option value="brz">Alemania</option>
                            <option value="bol">Portugal</option>
                        </optgroup>
    
                    </select>
                </label>
                <label for="device">
                    <p>Dispositivo en el que nos visitas</p>
                    <input minlength="5" maxlength="10" class="input-text" type="text"
                        list="devices" placeholder="Ingrese el dispositivo...">
                    <datalist id="devices" name="disposititvo">
                        <option>Computadora</option>
                        <option>Celular</option>
                        <option>Tablet</option>
                        <option>Smart TV</option>
                    </datalist>
                </label>
                <div class="button-container">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </footer>