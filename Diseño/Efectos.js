
$(document).ready(main);
contador=1;
cont2=1;
cont3=1;

function main(){
 
    
    $('.agregar').click(function(){
        if(cont2==1){
            $('.FormularioAgregar').css('display','block');
            cont2=0;
            
        }else{
            $('.FormularioAgregar').css('display','none');
             cont2=1;
        }
        
    });
        
    
    
     $('.mostrar').click(function(){
     
           
            $('.mostrar').css('display','none');
            
        
        
    });
    
     $('.apro').click(function(){
       
           
            $('.sin').removeAttr('checked');
            $('.todos').removeAttr('checked');
        
    });
    $('.sin').click(function(){
         $('.todos').removeAttr('checked');
            $('.apro').removeAttr('checked');
          
          
        
    });
  $('.todos').click(function(){
         $('.sin').removeAttr('checked');
            $('.apro').removeAttr('checked');
          
          
        
    });
  
};
