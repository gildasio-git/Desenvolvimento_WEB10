<div id="map"></div>
<div class="contato-container">
    <div class="center">
        <form method="post">
            <!--
                <div></div> - força os elementos irem todos para baixo
                considerando que estão como DISPLAY INLINE BLOCK 
            -->
             <input required type="text" name="nome" placeholder="nome...">
             <div></div>
             <input required type="text" name="email" placeholder="E-mail...">
             <div></div>
             <input required type="text" name="telefone" placeholder="Telefone...">
             <div></div>
             <textarea required name="mensagem" placeholder="Aqui sua mensagem..."></textarea>
             <div></div>
             <input type="hidden" name="identificador" value="form_contato"><!-- envia campo identificador oculto-->
             <input type="submit" name="acao" value="Enviar">

        </form>
    </div><!--center -->
</div><!--contato container-->