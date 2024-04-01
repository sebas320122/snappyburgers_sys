document.addEventListener('DOMContentLoaded', function () {
  //Detectar elementos html
  const menuTable = document.getElementById('filtro-table');
  const orderTable = document.getElementById('order-table');
  const orderForm = document.getElementById('order-form');

  //Agregar funcion a boton add
  menuTable.addEventListener('click', function (event) {
    if (event.target.classList.contains('btn-agregar')) {
      const item = event.target.getAttribute('data-item');
      const precio = parseFloat(event.target.getAttribute('data-precio'));
      const row = document.createElement('tr');
      row.innerHTML = `
        <td><input type="number" min="1" value="1" class="entrada-dato cantidad" name="cantidad[]" required></td>
        <td><input type="text" value="${item}" class="entrada-dato" name="item[]" required readonly></td>
        <td><input type="number" min="1" value="${precio}" class="entrada-dato" name="precio[]" required readonly></td>
        <td><button class="btn-delete">-</button></td>
      `;
      //agregar item a box-2
      orderTable.querySelector('tbody').appendChild(row);
    }
  });

  //Agregar funcion al boton delete
  orderTable.addEventListener('click', function (event) {
    if (event.target.classList.contains('btn-delete')) {
      //eliminar item de box-2
      event.target.closest('tr').remove();
    }
  });
  
}); 