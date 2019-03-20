
<div id="cabecalho">   
        
            <div id="barraLogin">
                
                       <v <a href="#" id="link01">globo.com</a>
                        <a href="#" id="link02">g1</a>
                        <a href="#" id="link03">globoesporte</a>
                        <a href="#" id="link04">gshow</a>
                        <a href="#" id="link05">videos</a>
                    
                    
                
                       
                        <div id="divteste">
                            <a href="#" id="link6">ASSINE JÁ</a>
                            <a href="#" id="link7">MINHA CONTA</a>
                            <a href="#" id="link8">E-MAIL</a>
                            <button id="buttonEntrar">ENTRAR</button>
                        </div>
                        
                
                
            </div>
                        
                        
        <div id="barraVermelha">
            
            
             <div id="dropdown">
                 
                 
                <button id="botaoMenu" >MENU</button>
                <div id="itens" ><a href="#">teste</a></div>
                
            </div>
            
            
            <a id="G1" href="index.php">G1</a>
        </div>
    
</div>
        
    <style>
         #botaoMenu{
                background-color:firebrick;
                color: white;
                padding: 10px;
                border: none; /* para tirar a borda*/
               cursor: pointer; /*para trocar o cursor*/
               /*cursor: help; para trocar o cursor-fica com uma interrogação*/
            text-decoration: none;
            font-size: 20px;
            }
            #dropdown{
                position: relative;
                display: inline-block;/* vai deixar as divs uma do lado da outra */
           }
            #itens{
                display: none;/* para não aparecer ao carregar a página e sim só quando passar o mouse no botao*/
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px; /*largura mínima*/
                box-shadow: 0px 8px 16px 0px;
            }
            #dropdown:hover /*enquando o mouse estiver em cima do dropdown*/  #itens{
                display:block;/*  para aparecer os itens*/ 
            }
            #itens a{
                color: black;
                text-decoration: none; /*pra nao ficar sublinhado de link*/
                display: block; /*pra parecer em bloco um abaixo do outro*/
            }
            #divteste{
               float: right;
            }
      
          
           
    </style>
