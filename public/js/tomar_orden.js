document.addEventListener('DOMContentLoaded', function () {
    const menuTable = document.getElementById('menu-table');
    const orderTable = document.getElementById('order-table');
    const orderForm = document.getElementById('order-form');

    menuTable.addEventListener('click', function (event) {
      if (event.target.classList.contains('btn-agregar')) {
        const item = event.target.getAttribute('data-item');
        const precio = parseFloat(event.target.getAttribute('data-precio'));
        const row = document.createElement('tr');
        row.innerHTML = `
          <td><input type="number" min="1" value="1" class="entrada-cantidad" required></td>
          <td>${item}</td>
          <td><button class="btn-delete">-</button></td>
        `;
        orderTable.querySelector('tbody').appendChild(row);
      }
    });

    orderTable.addEventListener('click', function (event) {
      if (event.target.classList.contains('btn-delete')) {
        event.target.closest('tr').remove();
      }
    });

    orderForm.addEventListener('submit', function (event) {
      event.preventDefault();
      const mesa = orderForm.querySelector('.entrada-mesa').value;
      const items = orderTable.querySelectorAll('tbody tr');
      const orderData = {
        mesa: mesa,
        items: []
      };
      items.forEach(function (item) {
        const cantidad = parseInt(item.querySelector('.cantidad').value);
        const nombre = item.querySelector('td:nth-child(2)').textContent;
        orderData.items.push({ nombre: nombre, cantidad: cantidad });
      });
      console.log(orderData); // Aquí puedes enviar los datos a tu backend o realizar alguna otra acción
      orderForm.reset(); // Limpiar el formulario después de enviar la orden
      orderTable.querySelector('tbody').innerHTML = ''; // Limpiar la tabla de orden
    });
  });