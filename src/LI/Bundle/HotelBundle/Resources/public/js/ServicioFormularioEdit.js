var $collectionHolder2;
var $cantHijos;
// setup an "add a tag" link
var $addTagLink2 = $('<button style="margin-top: 10px;" class="btn btn-success btn-sm btn-block" type="button" href="#" class="add_tag_link">Añadir Nuevo Producto</button>');
var $newLinkLi2 = $('<div></div>').append($addTagLink2);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    $collectionHolder2 = $('div.servicios');

    $forms = $collectionHolder2;
    $forms2 = $forms.children();
    $forms3 = $forms2.children();
    $forms4 = $forms3.children();
    $forms2.css({ "margin-bottom":"0px"});
    $forms3.css({ "display": "inline-block", "margin-bottom":"0px", "margin-right":"5px"});
    $forms4.css({ "display": "inline-block", "margin-bottom":"0px", "margin-right":"5px"});
    $forms3.remove('label');
    $forms4.remove('label');
    $forms.find('label').remove();

    //Para en el editar quitar un almacen
    $collectionHolder2.children().append(
        '<a href="#" class="remove-tag btn btn-danger btn-sm" style="margin-bottom: 28px">X</a>');

    $remover = $collectionHolder2.find('.remove-tag');
    $cantHijos = $remover.length;

    //Para quitar el primer label 0 ese ladilloso y el label 1 cuando hay dos almacenes agregados
    /*$collectionHolder2.find('.control-label').first().remove();
    if ($cantHijos > 1) {
        $hijos = $collectionHolder2.find('.control-label');
        $hijos.get(2).remove();
    };*/

    $remover.click(function(e) {
        e.preventDefault();
        $(this).parent().remove();
        if($cantHijos > 0){ $cantHijos--; }

        return false;
    });
    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder2.append($newLinkLi2);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder2.data('index', $collectionHolder2.find(':input').length);

    $addTagLink2.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        // add a new tag form (see next code block)
        //Es la cantidad maxima de items que podrá agregar a la venta
        if($cantHijos < 100){ addTagForm($collectionHolder2, $newLinkLi2); $cantHijos++; }
    });
});
function addTagForm($collectionHolder2, $newLinkLi2) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder2.data('prototype');

    // get the new index
    var index = $collectionHolder2.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder2.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<div></div>').append(newForm);
    //Quita los #label_ de los nuevos almacenes
    $newFormLi.find('.control-label').first().remove();
    //$newLinkLi2.before($newFormLi);

    // also add a remove button, just for this example
    $newFormLi.append('<a href="#" class="remove-tag btn btn-danger btn-sm btn-block">Quitar Producto</a><hr class="featurette-divider">');
    
    $newLinkLi2.before($newFormLi);
    
    // handle the removal, just for this example
    $('.remove-tag').click(function(e) {
        e.preventDefault();
        if($cantHijos > 0){ $cantHijos--; }
        $(this).parent().remove();
        return false;
    });
}
