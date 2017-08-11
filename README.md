# SkyCRUD
Lightweight dynamic PHP CRUD

Example usage:

```
$db = new db();
$user = new user();
$user->email = "test@skyweb.nu";
$user->password = $passwordHash;
//add
$db->users->add($user);
//get
$userGet = $db->users->get($user->id);
$userGet->email = "test2@skyweb.nu";
//update
$db->users->update($userGet);
//delete
$db->users->delete($userGet);
```
