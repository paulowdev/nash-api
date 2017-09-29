<?php

namespace Nash\Services;

use Nash\SessionInterface;
use Nash\Models\Entidade;

/**
 *
 * @author geanribeiro
 */
interface CrudServiceInterface {
    function __construct(SessionInterface $session);
    
    function create(Entidade $entity);
    function read($id);
    function update(Entidade $entity);
    function delete($id);
    function retrieve($take, $skip, $query = "");
}
