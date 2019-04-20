package com.mrx.blogapp.blogappboot.dao;

import com.mrx.blogapp.blogappboot.entity.Role;
import org.springframework.data.jpa.repository.JpaRepository;

public interface RoleDao extends JpaRepository<Role, String> {
}
