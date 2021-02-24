
async function AddProduct(name, price) 
{
    let data = [{"name" : "name",  "value" : name},{"name" : "price", "value" : price}]
    $.post( `AddProduct.php`, data, () => {
        window.location.reload();
    });
}

async function InsertProduct(name, price) 
{
    let data = [{"name" : "name",  "value" : name},{"name" : "price", "value" : price}]
    $.post( `AddProduct.php`, data), () => {
        window.location.reload();
    };
}

async function RemoveProduct(name, quantity) 
{
    let data = [{"name" : "name",  "value" : name},{"name" : "quantity", "value" : quantity}]
    $.post( `RemoveProduct.php`, data, () => {
        window.location.reload();
    });
}