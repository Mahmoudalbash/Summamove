import 'dart:convert';
import 'package:http/http.dart' as http;
import '../models/exercise.dart';
import '../models/performance.dart';
import 'auth_service.dart';

class ExerciseService {
  final String baseUrl = 'http://10.0.2.2:8000/api';

  Future<List<Exercise>> getExercises() async {
    final token = await AuthService.getToken();

    final response = await http.get(
      Uri.parse('$baseUrl/exercises'),
      headers: {
        'Authorization': 'Bearer $token',
        'Accept': 'application/json',
      },
    );

    if (response.statusCode == 200) {
      List data = jsonDecode(response.body);
      return data.map((e) => Exercise.fromJson(e)).toList();
    } else {
      throw Exception('Failed to load exercises');
    }
  }

  Future<Performance> addPerformance(int exerciseId, int duration) async {
    final token = await AuthService.getToken();
    final response = await http.post(
      Uri.parse('$baseUrl/performances'),
      headers: {
        'Authorization': 'Bearer $token',
        'Content-Type': 'application/json',
      },
      body: jsonEncode({
        'exercise_id': exerciseId,
        'duration': duration,
      }),
    );

    if (response.statusCode == 201 || response.statusCode == 200) {
      return Performance.fromJson(jsonDecode(response.body));
    } else {
      throw Exception('Failed to add performance');
    }
  }

  Future<Performance> updatePerformance(int performanceId, int duration) async {
    final token = await AuthService.getToken();
    final response = await http.put(
      Uri.parse('$baseUrl/performances/$performanceId'),
      headers: {
        'Authorization': 'Bearer $token',
        'Content-Type': 'application/json',
      },
      body: jsonEncode({
        'duration': duration,
      }),
    );

    if (response.statusCode == 200) {
      return Performance.fromJson(jsonDecode(response.body));
    } else {
      throw Exception('Failed to update performance');
    }
  }
}

