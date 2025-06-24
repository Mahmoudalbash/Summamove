import 'package:flutter/material.dart';
import '../services/auth_service.dart';
import 'login_page.dart';
import 'exercises_page.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  void _logout(BuildContext context) async {
    try {
      await AuthService.logout();
      Navigator.pushReplacement(
        context,
        MaterialPageRoute(builder: (_) => const LoginPage()),
      );
    } catch (e) {
      ScaffoldMessenger.of(context).showSnackBar(
        SnackBar(content: Text('Fout bij uitloggen: $e')),
      );
    }
  }

  void _goToExercises(BuildContext context) {
    Navigator.push(
      context,
      MaterialPageRoute(builder: (_) => const ExercisesPage()),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Summamove'),
        actions: [
          IconButton(
            icon: const Icon(Icons.logout),
            onPressed: () => _logout(context),
            tooltip: 'Uitloggen',
          ),
        ],
      ),
      body: Center(
        child: ElevatedButton(
          onPressed: () => _goToExercises(context),
          child: const Text('Bekijk Oefeningen'),
        ),
      ),
    );
  }
}

