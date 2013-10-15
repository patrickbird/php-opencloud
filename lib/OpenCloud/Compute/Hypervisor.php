<?php
/**
 * PHP OpenCloud library.
 * 
 * @copyright Copyright 2013 Rackspace US, Inc. See COPYING for licensing information.
 * @license   https://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 * @version   1.6.0
 * @author    Glen Campbell <glen.campbell@rackspace.com>
 * @author    Jamie Hannaford <jamie.hannaford@rackspace.com>
 */

namespace OpenCloud\Compute;

use OpenCloud\Common\PersistentObject;

/**
 * The Hypervisor class represents a hypervisor defined by the Compute service
 *
 * At its simplest, a Hypervisor represents a compute node in the system.
 */
class Hypervisor extends PersistentObject 
{

    public $hypervisor_hostname;
    public $cpu_info;
    public $free_disk_gb;
    public $hypervisor_version;
    public $disk_available_least;
    public $local_gb;
    public $free_ram_mb;
    public $id;
    public $vcpus_used;
	public $hypervisor_type;
	public $local_gb_used;
	public $memory_mb_used;
	public $memory_mb;
	public $current_workload;
	public $vcpus;
	public $running_vms;
	public $service_id;
	public $service_host;

    protected static $json_name = 'hypervisor';
    protected static $url_resource = 'os-hypervisors';
    
    /**
     * {@inheritDoc}
     */
    public function create($params = array()) 
    { 
        return $this->noCreate(); 
    }
    
    /**
     * {@inheritDoc}
     */
    public function update($params = array()) 
    { 
        return $this->noUpdate(); 
    }
    
    /**
     * {@inheritDoc}
     */
    public function delete() 
    { 
        return $this->noDelete(); 
    }

}
