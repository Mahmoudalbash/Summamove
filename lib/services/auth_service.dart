import 'package:shared_preferences/shared_preferences.dart';

class AuthService {
  static const String _tokenKey = 'token';

  static Future<bool> isLoggedIn() async {
    final prefs = await SharedPreferences.getInstance();
    return prefs.containsKey(_tokenKey);
  }

  static Future<void> logout() async {
    final prefs = await SharedPreferences.getInstance();
    await prefs.remove(_tokenKey);
  }

  static Future<bool> login(String email, String password) async {
    // Hier hoort je loginlogica (API-call), die dan token opslaat
    // Voorbeeld (hardcoded):
    if (email == 'test@example.com' && password == 'password') {
      final prefs = await SharedPreferences.getInstance();
      await prefs.setString(_tokenKey, 'your_dummy_token');
      return true;
    }
    return false;
  }

  static Future<String?> getToken() async {
    final prefs = await SharedPreferences.getInstance();
    return prefs.getString(_tokenKey);
  }
}

