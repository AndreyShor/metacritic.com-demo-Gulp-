// import db;

class User {

	private data;
	private table;

	private salt = "12345";

	constructor($POST) {

	}

	public login() {
		// $getData = SELCT email FROM TABLE; if it is exists

		// if (this.cryptoPassword() == $getData.password) {
		// 	this.jsonResponse({ текст который хочешь });
		// session_start(); * importy to learn it
		// $_COOKIES["SESSION"] = userName;
		// } else {
		//	this.jsonResponse({ текст который хочешь });
		//}

	}

	public register() {
		// use this.data check in this.table 'email'
		
		return null; // whatever else

		// else
		// $password_with_salt = this.cryptoPassword();
		// insert into table () VALUES ($user, );

		// this.jsonResponse({ текст который хочешь });
		
	}

	public checkUserSession() {
		// chech $_COokies to session if it is exists do query in data base and restore user data;
	}

	private cryptoPassword() {
		// return base64(this.data["password"] + this.salt + "this.data["email"]");
	}

	private jsonResponse(AsArray) {
		// if (AsArray.length > 0) {

		// }
		return JSON.stringify(AsArray);

		// json_encode(value)
	}

	private parsePost() {
		// parse to key -> value array

		this.data = "22";
	}

	private getDB(tableName) {
		try {
			
			// is exists ? good else create table;

		} catch (error) {
			// db.close();
		} finally {
			// db.close();

			throw Error("Db not find");
		}
		
		this.table = 'tableName';
	}

}