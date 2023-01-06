
<?php
class SuratKeluarModel
{
  private $db;
  private $surat = 'surat_keluar';
  private $jenis = 'jenis_surat_keluar';


  public function __construct()
  {
    $this->db = new Database;
  }

  // Surat Keluar
  public function getSuratKeluar()
  {
    $this->db->query('SELECT ' . $this->surat . '.*,' . $this->jenis . '.nama_jenis FROM ' . $this->surat . ' LEFT JOIN ' . $this->jenis . ' ON ' . $this->jenis . '.id=' . $this->surat . '.jenis_surat ORDER BY id DESC');
    $result = $this->db->resultSet();

    return $result;
  }

  public function getSuratKeluarById($id)
  {
    $this->db->query('SELECT ' . $this->surat . '.*,' . $this->jenis . '.nama_jenis FROM ' . $this->surat . ' LEFT JOIN ' . $this->jenis . ' ON ' . $this->jenis . '.id=' . $this->surat . '.jenis_surat WHERE ' . $this->surat . '.id=:id');
    $this->db->bind('id', $id);
    $row = $this->db->single();

    return $row;
  }

  public function getSuratKeluarByJenis($id_jenis)
  {
    $this->db->query('SELECT ' . $this->surat . '.*,' . $this->jenis . '.nama_jenis FROM ' . $this->surat . ' LEFT JOIN ' . $this->jenis . ' ON ' . $this->jenis . '.id=' . $this->surat . '.jenis_surat WHERE ' . $this->surat . '.jenis_surat=:jenis_surat');
    $this->db->bind('jenis_surat', $id_jenis);
    $result = $this->db->resultSet();

    return $result;
  }

  public function addSuratKeluar($data, $file)
  {
    $temp = $file['tmp_name'];
    $nama_file = rand(100, 100000) . '-' . $file['name'];
    $size = $file['size'];

    if ($file["name"]) {
      if ($size < 50000 * 1000) {
        move_uploaded_file($temp, "../public/files/lampiran/" . $nama_file);
      } else {
        return 0;
      }
    } else {
      $nama_file = NULL;
    }

    $query = "INSERT INTO " . $this->surat . " (username, tanggal, jenis_surat, nomor, asal, tujuan, perihal, lampiran, file_lampiran) 
    VALUES (:username, :tanggal, :jenis_surat, :nomor, :asal, :tujuan, :perihal, :lampiran, :file_lampiran)";


    $this->db->query($query);
    $this->db->bind('username', $_SESSION['username']);
    $this->db->bind('tanggal', $data['tanggal']);
    $this->db->bind('jenis_surat', $data['jenis_surat']);
    $this->db->bind('nomor', $data['nomor']);
    $this->db->bind('asal', $data['asal']);
    $this->db->bind('tujuan', $data['tujuan']);
    $this->db->bind('perihal', $data['perihal']);
    $this->db->bind('lampiran', $data['lampiran']);
    $this->db->bind('file_lampiran', $nama_file);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function deleteSuratKeluar($id)
  {
    $query = "SELECT * FROM " . $this->surat . " WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $surat = $this->db->single();

    if ($surat->file_lampiran) {
      if (unlink("../public/files/lampiran/" . $surat->file_lampiran)) {
        $query = "DELETE FROM " . $this->surat . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
      } else {
        return false;
      }
    } else {
      $query = "DELETE FROM " . $this->surat . " WHERE id=:id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();

      return $this->db->rowCount();
    }
  }

  // Jenis Surat
  public function getJenisSurat()
  {
    $this->db->query('SELECT * FROM ' . $this->jenis . ' ORDER BY id DESC');
    $result = $this->db->resultSet();

    return $result;
  }

  public function getJenisSuratById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->jenis . ' WHERE id = :id');
    $this->db->bind(':id', $id);
    $row = $this->db->single();

    return $row;
  }

  public function addJenisSurat($data)
  {
    $this->db->query('INSERT INTO ' . $this->jenis . ' (nama_jenis, kode) VALUES (:nama_jenis, :kode)');
    $this->db->bind(':nama_jenis', $data['nama_jenis']);
    $this->db->bind(':kode', $data['kode']);

    //execute 
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateJenisSurat($data)
  {
    $this->db->query('UPDATE ' . $this->jenis . ' SET nama_jenis=:nama_jenis,kode=:kode WHERE id=:id');
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':nama_jenis', $data['nama_jenis']);
    $this->db->bind(':kode', $data['kode']);

    //execute 
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function deleteJenisSurat($id)
  {
    $this->db->query('DELETE FROM ' . $this->jenis . ' WHERE id = :id');
    $this->db->bind(':id', $id);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
