package com.mrx.blogapp.blogappboot.dao;

import com.mrx.blogapp.blogappboot.entity.User;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;

public interface UserDao extends JpaRepository<User, String> {

    List<User> findByNameLike(String name);
}
