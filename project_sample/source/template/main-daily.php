<?php
$data = getDaily_table();
$htmlCode = '';

foreach ($data[1] as $row) {
  $htmlCode .= '<tr>
    <td><span class="badge bg-' . ($row['holiday'] ? 'danger' : 'secondary') . ' me-1">' . $row['date'] . '</span></td>
    <td>' . $row['aArea'] . '</td>
    <td>' . $row['bArea'] . '</td>
    <td>' . $row['cArea'] . '</td>
    <td>' . $row['dArea'] . '</td>
    <td>' . $row['total'] . '</td>
  </tr>';
}
?>
<div class="container-fluid px-4">
  <h1 class="mt-4">每日房況</h1>
  <div class="card mb-4">
    <div class="card-body">
      <table id="orderTable" class="table">
        <thead>
          <tr>
            <th>日期</th>
            <th><span class="badge rounded-pill bg-danger me-1">A區 x <?= $data[0][0] ?></span></th>
            <th><span class="badge rounded-pill bg-warning me-1">B區 x <?= $data[0][1] ?></span></th>
            <th><span class="badge rounded-pill bg-success me-1">C區 x <?= $data[0][2] ?></span></th>
            <th><span class="badge rounded-pill bg-info me-1">D區 x <?= $data[0][3] ?></span></th>
            <th>營業額</th>
          </tr>
        </thead>
        <tbody>
          <?= $htmlCode ?>
          <!-- <tr>
            <td><span class="badge bg-danger me-1">2023/02/01</span></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>1000</td>
          </tr>
          <tr>
            <td><span class="badge bg-secondary me-1">2023/02/02</span></td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>2000</td>
          </tr>
          <tr>
            <td><span class="badge bg-secondary me-1">2023/02/03</span></td>
            <td>1</td>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>9999</td>
          </tr> -->
        </tbody>
      </table>
    </div>
  </div>
</div>