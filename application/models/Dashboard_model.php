<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function getAllStock()
	{
		$query = $this->db->query("SELECT stockin.`nama_barang`,mbarang.`kode_barang` ,mbarang.`harga`, mbarang.`nama_kategori`, mbarang.`nama_satuan`, stockin.`lokasi`,
		(SELECT SUM(stockin.`jumlah_masuk`)FROM stockin WHERE stockin.`kode_barang`=mbarang.`kode_barang`) AS stockin,
		(SELECT COALESCE(SUM(stockout.`jumlah`),0) FROM stockout WHERE stockin.`kode_barang`=stockout.`kode_barang`) AS stockout,
		((SELECT SUM(stockin.`jumlah_masuk`)FROM stockin WHERE stockin.`kode_barang`=mbarang.`kode_barang`)-
		(SELECT COALESCE(SUM(stockout.`jumlah`),0) FROM stockout WHERE stockin.`kode_barang`=stockout.`kode_barang`))AS allstock,
		(stockin.`jumlah_masuk` - COALESCE(stockout.`jumlah`,0)) * mbarang.`harga` AS totalharga
		FROM stockin 
		LEFT JOIN stockout 
		ON stockin.`kode_barang`=stockout.`kode_barang`
		JOIN mbarang
		ON stockin.`kode_barang`=mbarang.`kode_barang`
		WHERE mbarang.`kode_barang`=stockin.`kode_barang`
		GROUP BY stockin.`nama_barang`")->result();
		return $query;
		// $query = $this->db->query("SELECT stockin.`nama_barang`AS nama_barang,stockin.`unit`AS unit, SUM(stockin.`jumlah_masuk`)AS stockin,
		// (SELECT SUM(stockout.`jumlah`)FROM stockout)AS stockout,
		// ((SELECT SUM(stockin.`jumlah_masuk`)FROM stockin) - (SELECT SUM(stockout.`jumlah`)FROM stockout) )AS allstock
		// FROM stockin
		// GROUP BY stockin.`nama_barang`")->result();
		// return $query;
	}
}

 // SELECT stockin.`nama_barang`AS nama_barang,stockin.`unit`AS unit,
 //        SUM(stockin.`jumlah_masuk`)AS stockin, SUM(stockout.`jumlah`)AS stockout,
 //        (SUM(stockin.`jumlah_masuk`)-SUM(stockout.`jumlah`))AS allstock FROM stockin
 //        JOIN stockout ON stockout.`nama_barang` = stockin.`nama_barang`
 //        GROUP BY stockin.`nama_barang`
