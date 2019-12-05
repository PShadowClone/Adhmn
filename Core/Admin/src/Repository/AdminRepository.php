<?php


namespace Core\Admin\Repository;


use Core\Admin\Interfaces\AdminInterface;
use Core\Admin\Models\Admin;
use Illuminate\Http\Request;

class AdminRepository implements AdminInterface
{
    /**
     * repository's model
     *
     * @author Amr
     * @var Admin
     */
    private $admin;

    /**
     * AdminRepository constructor.
     * @param Admin $admin
     * @author Amr
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    /**
     * get resources' specific
     * columns
     *
     * @param array $cols
     * @return mixed
     * @author Amr
     */
    public function get($cols = ['*'])
    {
        return $this->admin->orderBy('created_at', 'desc')->where(auth_country_condition())->get($cols);
    }

    /**
     * get all resources
     *
     *
     * @return mixed
     * @author Amr
     */
    public function all()
    {
        return $this->admin->orderBy('created_at', 'desc')->where(auth_country_condition())->paginate(DEFAULT_PAGINATION);
    }

    /***
     * find resource by id
     *
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function find($id, $where = [])
    {
        return $this->admin->where(auth_country_condition())->where($where)->findOrFail($id);
    }

    /**
     * create new resource
     *
     * @param Request $request
     * @return mixed
     * @author Amr
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $data['is_active'] = "{$data['is_active']}";
        $data['parent_id'] = auth_user()->id;
        return $this->admin->create($data);
    }

    /**
     * update resource by id
     *
     * @param Request $request
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['email', 'name', 'is_active', 'country_id']);
        $admin = $this->find($id);
        $admin->fill($data);
        $admin->update();
        return $admin;
    }

    /**
     * delete resource by id
     *
     * @param $id
     * @return mixed
     * @author Amr
     */
    public function delete($id)
    {
        $admin = $this->find($id, ['parent_id' => auth_user()->id]);
        $admin->delete();
        return $admin;
    }
}