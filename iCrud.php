<?php
/**
 * Interface iCrud is the benchmark for create, read, update and delete. 
 * Can be used to implement nouns. ie. users.
 */
interface iCrud {
	public function create($data);
	public function read();
	public function update($data);
	public function delete();
}